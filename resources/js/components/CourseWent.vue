<template>
  <div>
    <button
      type="button"
      class="btn m-0 p-1 shadow-none"
      :class="{'green-text':this.isWentBy, 'animated heartBeat fast':this.gotToWent}" 
      @click="clickLike" 
    >
      <i class="fas fa-check-circle mr-1"
      />
    </button>
    {{countWents}}
  </div>
</template>

<script>
export default {
    props: {
      initialIsWentBy: {
        type: Boolean,
        default: false,
      },
      initialCountWents: {
        type: Number,
        default: 0,
      },
      authorized: {
        type: Boolean,
        default: false,
      },
      endpoint: {
        type: String,
      },
    },
    data() {
      return {
        isWentBy: this.initialIsWentBy,
        countWents: this.initialCountWents,
        gotToWent: false,
      }
    },
    methods: {
      clickLike() {
        if (!this.authorized) {
          alert('いいね機能はログイン中のみ使用できます')
          return
        }

        this.isWentBy
          ? this.unwent()
          : this.went()
      },
      async went() {
        const response = await axios.put(this.endpoint)

        this.isWentBy = true
        this.countWents = response.data.countWents
        this.gotToWent = true
      },
      async unwent() {
        const response = await axios.delete(this.endpoint)

        this.isWentBy = false
        this.countWents = response.data.countWents
        this.gotToWent = false
      },
    },
  }
</script>
