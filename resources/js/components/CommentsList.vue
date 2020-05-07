<template>
    <div class="comments-list">

        <div class="box app__box">
            <article class="media">
                <div class="media-content">
                    <div class="content is-medium">
                        <span class="icon has-text-primary">
                            <i class="fas fa-comments" aria-hidden="true"></i>
                        </span>
                        <strong>Сomments</strong>
                        <br>
                    </div>
                    <div class="content is-medium">
                        <Loading v-if="loading"></Loading>
                        <Comment
                            :comment="comment"
                            :key="comment.id"
                            v-for="(comment, index) in comments"
                            @comment-deleted="onCommentDelete(index)">
                        </Comment>
                    </div>
                </div>
            </article>
        </div>

        <div class="box app__box">
            <article class="media">
                <div class="media-content">
                    <div class="content is-medium">
                <span class="icon has-text-primary">
                    <i class="fas fa-envelope" aria-hidden="true"></i>
                </span>
                        <strong>Message</strong>
                        <br>
                    </div>
                    <div class="content is-medium">
                        <CommentForm :action="postUrl" @comment-saved="loadComments"></CommentForm>
                    </div>
                </div>
            </article>
        </div>

    </div>
</template>

<script>
    import axios from 'axios';
    import Comment from "./Comment";
    import Loading from "./Loading";
    import CommentForm from "./CommentForm";

    export default {
        name: 'CommentsList',
        props: ['load-url', 'post-url'],
        components: {
            Comment,
            Loading,
            CommentForm
        },
        data() {
            return {
                comments: [],
                loading: true,
            }
        },
        methods: {
            loadComments() {
                this.loading = true;
                axios.get(this.loadUrl)
                    .then(response => {
                        this.comments = response.data;
                        this.loading = false;
                    })
                    .catch(err => {
                        console.log(err);
                        this.loading = false;
                    });
            },
            onCommentDelete(index) {
                this.comments.splice(index, 1);
            }
        },
        created() {
            setTimeout(this.loadComments, 3000);
        }
    }
</script>

<style scoped>
</style>
