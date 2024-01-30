export default function quantityPlugin(
  {
    state,
    maxValue,
    minValue,
  },
) {
  return {
    state,
    maxValue,
    minValue,
    isDecrementAllowed: true,
    isIncrementAllowed: true,

    increment() {
      if (this.minValue !== 0 && this.maxValue !== 0) {
        if (this.state < this.maxValue && this.state >= this.minValue) {
          this.state++
          $wire.$refresh()
          if (this.state === this.maxValue) {
            this.isIncrementAllowed = false
          } else {
            this.isIncrementAllowed = true
            this.isDecrementAllowed = true
          }
        }
      } else {
        this.state++
        $wire.$refresh()
      }
    },

    decrement() {
      if (this.minValue !== 0 && this.maxValue !== 0) {
        if (this.state > 0 && this.state <= this.maxValue && this.state > this.minValue) {
          this.state--
          $wire.$refresh()
          if (this.state === this.minValue) {
            this.isDecrementAllowed = false
          } else {
            this.isIncrementAllowed = true
            this.isDecrementAllowed = true
          }
        }
      } else {
        this.state--
        $wire.$refresh()
      }
    },

    init: function() {
      this.isIncrementAllowed = true
      this.isDecrementAllowed = true
    },
  }
};
