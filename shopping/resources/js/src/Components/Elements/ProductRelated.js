import React, { Component } from 'react';
import { BrowserRouter as Router, Link } from 'react-router-dom';

class ProductRelated extends Component {
    render(){
        return(
            <div className="product-related-container">
                <section class="related-product spad">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="section-title">
                                    <h2>Related Products</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <Router>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-product-item">
                                    <figure>
                                        <Link to="#"><img src="img/products/img-1.jpg" alt=""/></Link>
                                        <div class="p-status">new</div>
                                    </figure>
                                    <div class="product-text">
                                        <h6>Green Dress with details</h6>
                                        <p>$22.90</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-product-item">
                                    <figure>
                                        <Link to="#"><img src="img/products/img-2.jpg" alt=""/></Link>
                                        <div class="p-status sale">sale</div>
                                    </figure>
                                    <div class="product-text">
                                        <h6>Yellow Maxi Dress</h6>
                                        <p>$25.90</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-product-item">
                                    <figure>
                                        <Link to="#"><img src="img/products/img-3.jpg" alt=""/></Link>
                                        <div class="p-status">new</div>
                                    </figure>
                                    <div class="product-text">
                                        <h6>One piece bodysuit</h6>
                                        <p>$19.90</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-product-item">
                                    <figure>
                                        <Link to="#"><img src="img/products/img-4.jpg" alt=""/></Link>
                                        <div class="p-status popular">popular</div>
                                    </figure>
                                    <div class="product-text">
                                        <h6>Blue Dress with details</h6>
                                        <p>$35.50</p>
                                    </div>
                                </div>
                            </div>
                            </Router>
                        </div>
                    </div>
                </section>
            </div>
        );
    };
}

export default ProductRelated;