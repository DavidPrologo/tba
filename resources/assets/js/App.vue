<template>
    <div id='main'>
        <main class="flexbox">
        
            <Board id="board-1">
                <Card id="card-1"></Card>
            </Board>
        </main>
    </div>
</template>

<script>
import Board from "./components/Board";
import Card from "./components/Board";
export default{
    name: "app",
    components: {
        Board,
        Card
    }
}

</script>

