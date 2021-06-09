import React, { Component } from 'react';
import Breadcrumb from '../Elements/Breadcrumb';
import AllProducts from '../Elements/AllProducts';

class Shop extends Component {
    render() {
        return (
          <div className="shop-container">
            <Breadcrumb></Breadcrumb>
            <AllProducts></AllProducts>
          </div>
        );
    }
}

export default Shop;