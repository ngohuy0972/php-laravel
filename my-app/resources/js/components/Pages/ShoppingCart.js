import React, { Component } from 'react';
import Breadcrumb from '../Elements/Breadcrumb';
import ShoppingCartElement from '../Elements/ShoppingCartElement';

class ShoppingCart extends Component {
    render(){
      return(
        <div className="shopping-cart-container">
          <Breadcrumb></Breadcrumb>
          <ShoppingCartElement></ShoppingCartElement>
        </div>

      );
    };
}

export default ShoppingCart;
