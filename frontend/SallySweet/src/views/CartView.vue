<template>
  <section class="h-screen bg-white py-12 sm:py-16 lg:py-20">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <h1 class="text-2xl font-bold text-gray-900">Your Cart</h1>
      </div>

      <div class="mx-auto mt-8 max-w-2xl md:mt-12">
        <div class="bg-white shadow">
          <div class="px-4 py-6 sm:px-8 sm:py-10">
            <div class="flow-root">
              <ul class="-my-8">
                <!-- Loop through cart items -->
                <li v-for="(item, index) in cartItems" :key="index" class="flex flex-col space-y-3 py-6 text-left sm:flex-row sm:space-x-5 sm:space-y-0">
                  <div class="shrink-0">
                    <img class="h-24 w-24 max-w-full rounded-lg object-contain" :src="item.image" :alt="item.name" />
                  </div>

                  <div class="relative flex flex-1 flex-col justify-between">
                    <div class="sm:col-gap-5 sm:grid sm:grid-cols-2">
                      <div class="pr-8 sm:pr-5">
                        <p class="text-base font-semibold text-gray-900">{{ item.name }}</p>
                        <p class="mx-0 mt-1 mb-0 text-sm text-gray-400">{{ item.description }}</p>
                      </div>

                      <div class="mt-4 flex items-end justify-between sm:mt-0 sm:items-start sm:justify-end">
                        <p class="shrink-0 w-20 text-base font-semibold text-gray-900 sm:order-2 sm:ml-8 sm:text-right">£ {{ item.price.toFixed(2) }}</p>
                        

                        <div class="sm:order-1">
                          <div class="mx-auto flex h-8 items-stretch text-gray-600">
                            <button @click="decrementQuantity(index)" class="flex items-center justify-center rounded-l-md bg-gray-200 px-4 transition hover:bg-black hover:text-white">-</button>
                            <div class="flex w-full items-center justify-center bg-gray-100 px-4 text-xs uppercase transition">{{ item.quantity }}</div>
                            <button @click="incrementQuantity(index)" class="flex items-center justify-center rounded-r-md bg-gray-200 px-4 transition hover:bg-black hover:text-white">+</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <button type="button" @click="removeItem(index)" class="absolute top-0 right-0 flex rounded p-2 text-center text-gray-500 transition-all duration-200 ease-in-out focus:shadow hover:text-gray-900">
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
                </li>
              </ul>
            </div>

            <div class="mt-6 border-t border-b py-2">
              <div class="flex items-center justify-between">
                <p class="text-sm text-gray-400">Subtotal</p>
                <!-- <p class="text-lg font-semibold text-gray-900">£ {{ calculateTotal.toFixed(2) }}</p> -->
              </div>
            </div>
            <div class="mt-6 text-center">
              <button @click="sendCheckoutSMS" type="button" class="group inline-flex w-full items-center justify-center rounded-md bg-sw-pink px-6 py-4 text-lg font-semibold text-white transition-all duration-200 ease-in-out focus:shadow hover:bg-sw-pink">
                Checkout
                <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:ml-8 ml-4 h-6 w-6 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import axios from 'axios';

export default {
  name: "CartView",
  data() {
    return {
      cartItems: [
        { name: 'Kitkat', description: 'Crunchy wafer covered in milk chocolate', price: 1.99, quantity: 1, image: '../assets/products/Kitkat.jpg' },
        { name: 'M&M\'s', description: 'Colorful candy-coated chocolate', price: 0.99, quantity: 1, image: '../assets/products/m&m.png' }
      ],
    };
  },
  methods: {
    incrementQuantity(index) {
      this.cartItems[index].quantity += 1;
    },
    decrementQuantity(index) {
      if (this.cartItems[index].quantity > 1) {
        this.cartItems[index].quantity -= 1;
      }
    },
    removeItem(index) {
      this.cartItems.splice(index, 1);
    },
    sendCheckoutSMS() {
      axios.post('/send-sms', {
        to: '+94711890590',
        body: 'Your order has been placed successfully!'
      })
      .then(response => {
        alert('Checkout SMS sent successfully!');
      })
      .catch(error => {
        console.error('Failed to send checkout SMS:', error);
        alert('Failed to send checkout SMS.');
      });
    },
    calculateTotal() {
    const total = this.cartItems.reduce((total, item) => total + item.price * item.quantity, 0);
    console.log(total); 
    }
  },
  computed: {
    total() {
      return this.cartItems.reduce((sum, item) => sum + (item.price * item.quantity), 0);
    }
  }
}
</script>

<style scoped>
  /* Add your CSS styling here */
</style>
