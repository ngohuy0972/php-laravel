import React, { Component } from 'react';
import Breadcrumb from '../Elements/Breadcrumb';
import CheckOutElement from '../Elements/CheckOutElement';

class CheckOut extends Component {
    render(){
        return(
            <div  className="checkout-container">
              <Breadcrumb></Breadcrumb>
              <CheckOutElement></CheckOutElement>
            </div>
        );
    };
} 

export default CheckOut;