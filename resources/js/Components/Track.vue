<script>
export default {
    name: "Track",
    props: {
        title: String,
        artist: String,
        image: String,
        music: String
    },
    methods: {
      handclick() {
        // const url = `storage/tracks/musics/test.wav`;
        // console.log(url);
        // let audio = new Audio(url);
        // audio.play();

        this.$emit('played', this.music);
      }
    }
};
</script>

<template>
    <div class="max-w-sm rounded overflow-hidden shadow-lg cursor-pointer">
        <div class="w-full">
          <img src="storage/tracks/images/test.svg" alt=""></div>
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ title }}</div>
            <small class="text-gray-700 text-base" >{{ artist }}</small>
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full mb-2"
        @click="handclick"
        >Lire</button>
    </div>
</template>
