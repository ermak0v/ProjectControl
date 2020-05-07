<template>
    <div class="search-form">
        <artice class="panel is-primary" >
            <div v-bind:class="{ 'panel-heading': message != '', 'panel-block': message != '', 'frame': message == '' }">
                <p class="control has-icons-left">
                    <input v-on:click.once="loadData" class="input is-primary" v-model="message" type="text" placeholder="Search" style="width: 400px;">
                    <span class="icon is-left">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </span>
                </p>
            </div>
            <SearchPopUp v-if="message != ''" :action="postList_n"></SearchPopUp>
        </artice>
    </div>
</template>

<script>
    import axios from 'axios';
    import SearchPopUp from "./SearchPopUp";

    export default {
        name: "SearchForm",
        props: ['load-url'],
        components:{
            SearchPopUp
        },
        data () {
            return {
                message: "",
                myData: [],
                result: [],
            }
        },
        methods: {
            loadData() {
                axios.get(this.loadUrl)
                    .then(response => {
                            this.myData = response.data;
                        })
                    .catch(err => {
                        console.log(err);
                    });
            }

        },
        computed: {
            postList_n: function () {
                this.result = [];
                var vm = this
                this.result = this.myData.filter(function (item) {
                    return item.name.toLowerCase().indexOf(vm.message.toLowerCase()) !== -1
                })
                return this.result;
            }
        },
    };
</script>

<style scoped>
    .frame {
        border: 5px solid transparent;
        border-bottom: 6px solid transparent;
    }

    .panel-block  {
        padding:5px;
    }
</style>
