<template>
    <div class="container">
        <h1 class="font-normal text-3xl text-gray-800 leading-none mb-8">
            Your Archievements
        </h1>

        <input 
            placeholder="Your Laracasts API Token" 
            v-model="token" 
            class="border p-2 rounded w-full mb-8"
            @keyup.enter="fetchAchievements"
        >

        <p class="text-red-500 italic text-sm" v-if="message" v-text="message"></p>

        <ul>
            <li
                v-for="archievement in archievements"
                v-text="archievement.name"
            >
            </li>
        </ul>

    </div>
</template>

<script>
export default {
    data() {
        return { archievements: [], token: '', message: '' }
    },
    // created() {
        methods: {
            fetchAchievements() {
                // axios.get('http://assets.test/api/archievements?api_token=N0ibsB1CmktdkA7vof9a3LCPB3IQr2zRAOCbh6OeZbU12Yj0y7XIfcAG7qIj')
                axios.get(
                    `http://assets.test/api/archievements?api_token=${
                        this.token
                        }`
                    )
                    .catch(error => {
                        // console.log(error.response);
                        this.message = error.response.data.message;
                        this.archievements = [];
                    })
                     .then(({ data }) => {
                         this.archievements = data;
                         this.message = null;
            });
        }

        //         methods: {
        //     fetchAchievements() {
        //         // axios.get('http://assets.test/api/archievements?api_token=N0ibsB1CmktdkA7vof9a3LCPB3IQr2zRAOCbh6OeZbU12Yj0y7XIfcAG7qIj')
        //         axios.get(
        //             `http://assets.test/api/archievements?api_token=${this.token}`)
        //              .then(response => {
        //                  this.archievements = response.data;
        //              })
        // }
    }
};
</script>



