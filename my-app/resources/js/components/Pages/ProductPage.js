import React, { Component } from 'react';
import Breadcrumb from '../Elements/Breadcrumb';
import ProductDetail from '../Elements/ProductDetail';
import ProductRelated from '../Elements/ProductRelated';

class ProductPage extends Component {
    render(){
        return(
            <div className="product-page-container">
                <Breadcrumb></Breadcrumb>
                <ProductDetail></ProductDetail>
                <ProductRelated></ProductRelated>
            </div>
        );
    };
}

export default ProductPage;