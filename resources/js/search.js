import Vue from 'vue';
import SearchForm from "./components/SearchForm";

document.querySelectorAll('.js-search-form').forEach(node => {
    new Vue({
        el: node,
        components: {
            SearchForm
        }
    });
});
