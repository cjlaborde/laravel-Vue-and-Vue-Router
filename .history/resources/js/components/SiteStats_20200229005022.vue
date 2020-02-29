<template>
    <div class="container">
        <h1 class="font-normal text-3xl text-gray-800 leading-none mb-8">
            Laracasts Stats
        </h1>

        <ul>
            <li>
                <strong>Total Series: </strong> {{ series }}
            </li>

            <li>
                <strong>Total Lessons: </strong> {{ lessons }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            series: 0,
            lessons: 0
        }

    },

    created() {
        // axios.get('http://assets.test/api/stats').then(console.log);
        axios.get('http://assets.test/api/stats').then(response => {
            let {data } = response;
            
            this.series = response.data.series;
             this.lessons = response.data.lessons;
        });
    }
    // created() {
    //     // axios.get('http://assets.test/api/stats').then(console.log);
    //     axios.get('http://assets.test/api/stats').then(response => {
    //         this.series = response.data.series;
    //          this.lessons = response.data.lessons;
    //     });
    // }
    
};
</script>