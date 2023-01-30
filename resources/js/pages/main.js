import axios from 'axios';
import { getDeviceName } from '../modules/device.js';

if (document.querySelector('.content--main')) {
  const productsContainer = document.querySelector('[data-container="products"]');
  const productsQuantity = {
    'mobile': 4,
    'tablet': 6,
    'desktop': 12,
    'fullhd': 18,
  };

  if (productsContainer) {
    axios.post('/templates/products', { quantity: productsQuantity[getDeviceName()] })
      .then(({ data }) => productsContainer.innerHTML = data);
  }
}
