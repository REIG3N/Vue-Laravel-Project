<template>
  <MusicLayout>
    <h1>Liste de mes tracks</h1>

    <template #content>
      <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-4">

            <Track            
            v-for="track in tracks" 
            :key="track.uuid" 
            :title="track.title" 
            :artist="track.artist"
            :image="track.image"
            :music="track.music"
            @played="play(track.music)"
            />
            

    </div>
    </template>
  </MusicLayout>
</template>

<script>
import MusicLayout from '../../Layouts/MusicLayout.vue';
import Track from '../../Components/Track.vue';

export default {
    name: "Index",
    components: {
        MusicLayout,
        Track
    },
    props: {
        tracks: Array,
    },
    data() {
        return {  
          audio: null,
          currentTrack: null
        }
    },
    methods: {
      play(track) {
        const url = 'storage/' + track.music;
        if (!this.currentTrack) {
          this.audio = new Audio(url);
          this.audio.play();
        } else if (this.currentTrack !== track.uuid) {
          this.audio.pause();
          this.audio.src = url;
          this.audio.play();
        }else {
          this.audio.paused ? this.audio.play() : this.audio.pause();
        }

        this.currentTrack = track.uuid;
        this.addeventListener('ended', () => {
          this.currentTrack = null;
        });

      }
    }
};
</script>
