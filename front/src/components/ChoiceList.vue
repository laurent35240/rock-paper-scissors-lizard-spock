<template>
    <div>
        <ChoiceItem v-for="choice in choices" :key="choice.value" :choice="choice"/>
    </div>
</template>

<script>
    import ChoiceItem from "./ChoiceItem";

    export default {
        name: 'ChoiceList',
        components: {ChoiceItem},
        data () {
            return {
                choices: [
                    {value: 'rock', text: 'Rock'},
                    {value: 'paper', text: 'Paper'},
                    {value: 'scissors', text: 'Scissors'},
                    {value: 'lizard', text: 'Lizard'},
                    {value: 'spock', text: 'Spock'},
                ]
            }
        }
    }
</script>
