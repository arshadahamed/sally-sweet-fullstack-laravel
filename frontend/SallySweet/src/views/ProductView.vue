<template>
    <div class="flex flex-col items-center justify-center">
         <h1 class="animate-flip-down animate-once mb-5 my-5 text-3xl font-bold text-sw-navy justify-center">Explore Our Delightful Collection at Sally Sweet</h1>
        <p class="text-xl text-gray-600 mb-3">Discover your favorite sweets and treats in our curated selection</p>
      <select v-model="targetCurrency" @change="fetchConversionRate"
            class="block appearance-none w-55 bg-white border border-gray-400 hover:border-gray-500 px-4 py-1 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <option value="GBP">British Pound (GBP)</option>
            <option value="EUR">Euro (EUR)</option>
            <option value="USD">US Dollar (USD)</option>
            <option value="LKR">Sri Lankan Rupee (LKR)</option>
        </select>

    </div>
    <div class="mx-auto mt-1 w-screen max-w-screen-md py-10 leading-6">
      <form class="relative mx-auto flex w-full max-w-2xl items-center justify-between rounded-md border shadow-lg">
        <svg class="absolute left-2 block h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="11" cy="11" r="8" class=""></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65" class=""></line>
        </svg>
        <input type="name" name="search" v-model="searchQuery" class="h-14 w-full rounded-md py-4 pr-40 pl-12 outline-none focus:ring-2" placeholder="product name:" />
        <button type="submit" class="absolute right-0 mr-1 inline-flex h-12 items-center justify-center rounded-lg bg-gray-900 px-10 font-medium text-white focus:ring-4 hover:bg-gray-700">Search</button>
      </form>
    </div>
    <div class="flex flex-row items-center justify-center gap-2">
      <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-blue-100 text-blue-700 ring-1 ring-inset ring-blue-600/10">
        <span class="size-1.5 inline-block rounded-full bg-blue-800 dark:bg-blue-500"></span>
        Chocolate
      </span>
      <span class="inline-flex items-center rounded-md bg-red-50  gap-x-1.5 py-1.5 px-3 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10">
        <span class="size-1.5 inline-block rounded-full bg-red-800 dark:bg-red-500"></span>
        Nuts</span>
      <span class="inline-flex items-center rounded-md bg-yellow-50 gap-x-1.5 py-1.5 px-3 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">
        <span class="size-1.5 inline-block rounded-full bg-yellow-800 dark:bg-yellow-500"></span>
        Sweets</span>
      <span class="inline-flex items-center rounded-md bg-green-50 gap-x-1.5 py-1.5 px-3 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
         <span class="size-1.5 inline-block rounded-full bg-green-800 dark:bg-green-500"></span>
        Others</span>

    </div>
    <div class="w-full max-w-7xl mx-auto py-4 px-4 md:px-8">
            <div class="flex flex-col lg:flex-row lg:items-center max-lg:gap-4 justify-between w-full">

                <div class="relative w-half max-w-sm">
                    <svg class="absolute top-1/2 -translate-y-1/2 left-4 z-50" width="20" height="20"
                        viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.5555 3.33203H3.44463C2.46273 3.33203 1.66675 4.12802 1.66675 5.10991C1.66675 5.56785 1.84345 6.00813 2.16004 6.33901L6.83697 11.2271C6.97021 11.3664 7.03684 11.436 7.0974 11.5068C7.57207 12.062 7.85127 12.7576 7.89207 13.4869C7.89728 13.5799 7.89728 13.6763 7.89728 13.869V16.251C7.89728 17.6854 9.30176 18.6988 10.663 18.2466C11.5227 17.961 12.1029 17.157 12.1029 16.251V14.2772C12.1029 13.6825 12.1029 13.3852 12.1523 13.1015C12.2323 12.6415 12.4081 12.2035 12.6683 11.8158C12.8287 11.5767 13.0342 11.3619 13.4454 10.9322L17.8401 6.33901C18.1567 6.00813 18.3334 5.56785 18.3334 5.10991C18.3334 4.12802 17.5374 3.33203 16.5555 3.33203Z"
                            stroke="black" stroke-width="1.6" stroke-linecap="round" />
                    </svg>
                    <select id="Offer"
                        class="h-12 w-auto border border-gray-300 text-gray-900 pl-11 text-base font-normal leading-7 rounded-full block py-2.5 px-4 appearance-none relative focus:outline-none bg-white transition-all duration-500 hover:border-gray-400 hover:bg-gray-50 focus-within:bg-gray-50">
                        <option selected>Sort by </option>
                        <option value="option 1">Chocolate</option>
                        <option value="option 2">Nuts</option>
                        <option value="option 3">Others</option>
                    </select>
                    <svg class="absolute top-1/2 -translate-y-1/2 right-4 z-50" width="16" height="16"
                        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0002 5.99845L8.00008 9.99862L3.99756 5.99609" stroke="#111827" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
          </div>

    <div class="productcard py-1">
      <ProductCard
          v-for="product in filteredProducts"
          :key="product.id"
          :name="product.name"
          :description="product.description"
          :off="product.off"
          :price="`${getCurrencySymbol()}${convertCurrency(product.origial_price)}`"
          :discountPrice="`${getCurrencySymbol()}${convertCurrency(product.selling_price)}`"
          :imageUrl="product.imageUrl"
      />
    </div>


  </template>

  <script>
  import ProductCard from '@/components/ProductCard.vue';
  import axios from 'axios';

  export default {
    components: {
      ProductCard
    },
    data() {
      return {
        products: [],
        conversionRate: 1,
        targetCurrency: 'GBP',
        currencySymbols: {
          'EUR': '€',
          'USD': '$',
          'LKR': '₨.',
          'GBP': '£'
        },
        searchQuery: '',
        currentPage: 1,
        itemsPerPage: 10,
      };

    },
    methods: {
      fetchConversionRate() {
        const apiKey = '9a9eba155834bbe079700f24';
            axios.get(`https://v6.exchangerate-api.com/v6/${apiKey}/latest/GBP`)
          .then(response => {
            this.conversionRate = response.data.conversion_rates[this.targetCurrency];
          })
          .catch(error => {
            console.error('Currency API error:', error);
          });
      },
      convertCurrency(price) {
        return (price * this.conversionRate).toFixed(2);
      },
      getCurrencySymbol() {
        return this.currencySymbols[this.targetCurrency];
      },
    },
    created() {
      this.fetchConversionRate();
      axios.get('http://127.0.0.1:8000/api/products')
        .then(response => {
          this.products = response.data;
        })
        .catch(error => {
          console.error('Error fetching products:', error);
        });
    },
    computed: {
    filteredProducts() {
      if (!this.searchQuery) {
      return this.products; // Return all products if search query is empty
      }
      return this.products.filter((product) =>
        product.name.toLowerCase().startsWith(this.searchQuery.toLowerCase())
      );
    },
  }

  };
  </script>

  <style>
.productcard {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    height: 100%;
    width: 100%;
}

.productcard-item {
    flex: 0 10 2000px;
    margin: 10px;
}
</style>
