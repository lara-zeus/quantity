/*import HSInputNumber from 'preline/preline';*/

import { HSInputNumber } from "preline/preline"

/*window.HSInputNumber = HSInputNumber;*/

export default function quantityPlugin(
  {
    state,
    elem,
  },
) {
  return {
    state,

    init: function() {

      //this.state = 123;
      /*window.addEventListener('load', () => {
        const el = HSPinInput.getInstance('#sdfsdkljnbghsdfsfssdfsdfflbhkgjlan');
        console.log(el);

        // Listen for the 'completed' event
        el.on('completed', ({
                              currentValue
                            }) => {
          alert(currentValue);
        });
      });*/

      //const el = HSInputNumber.getInstance(this.elem);
      //console.log(HSInputNumber.getInstance('#qqq'));

      /*el.on('change', ({inputValue}) => {
        //this.state.initialValue = inputValue
        console.log(inputValue);
      });
      console.log(state.initialValue)*/
      //this.state = state
    },
  }
};
