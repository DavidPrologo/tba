<template>
	
	<div >
			<v-list class="grey lighten-3">
	           <v-list-tile avatar v-for="card in cards" v-bind:key="card.id">
		            <v-list-tile-content>
		              <v-list-tile-title
		               style="border-radius:5px"
		               class="white">
		               <div class="pl-3 py-2" >{{card.name}}</div>
		                </v-list-tile-title>

		            </v-list-tile-content>
		          </v-list-tile>

		          <v-list-tile>
		          	<a href="#">Add card</a>
		          </v-list-tile>
		 </v-list>
	</div>

</template>


<script>
	
	export default {
		props:['list'],
		data() {
			return { 
				cards:'',
		}
	},

	created(){
		this.cards=this.list.cards;
	},

	methods:{
		createCard(listId) {
			this.editCardId=listId;

			axios.post('/board/'+this.list_board_id+"/list/"+this.list.id+"/card",{name:this.cardData.name})
			.then(respoonse=>{
				console.log(response);
				
				this.cardData="";
				this.editCardId="";
			});
		}
		updateCard(cardId){
			//ajax req to create list
			axios.put("/cards/"+card,{list_id:listId})
			.then(response=>{
				console.log(responde);
			});
		},		
		destroyCard(cardId) {
			axios.delete("/cards/"+cardId+"/list/"+listId)
			.then(response=>{
				console.log(response);
			});
		},
	}
		
}
	










</script>
