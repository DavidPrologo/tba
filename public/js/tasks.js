// import Vue from 'vue';

const app = new Vue({
    el: '#app',
    data: {
        friends: [],
    },
    methods: {
        deleteFriend(id, i){
            fetch("http://tba.test/api/v1/friends" + id,{
                method: "DELETE"
            })
            .then(()=>{
                this.friend.splice(i, 1);
            })
        }
    },
    mounted(){
        fetch("http://tba.test/api/v1/friends")
        .then(response => response.json())
        .then((data) => {
            this.friends = data;
        })
    },
    template: `
    <div>
        <li v-for="friend, i in friends">
            <button v-on:click="deleteFriend(friend.id, i)">x</button>{{friend.id}}
        </li>
    </div>
    `,
});