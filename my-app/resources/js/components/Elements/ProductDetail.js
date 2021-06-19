import React, { Component } from 'react';
import { BrowserRouter as Router, Link } from 'react-router-dom';

class ProductDetail extends Component {
    render(){
        return(
            <div className="product-detail-container">
                <section class="product-page">
                    <div class="container">
                        <div class="product-control">
                            <Router>
                            <Link to="#">Previous</Link>
                            <Link to="#">Next</Link>
                            </Router>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="product-slider owl-carousel">
                                    <div class="product-img">
                                        <figure>
                                            <img src="frontend/img/product/product-1.jpg" alt=""/>
                                            <div class="p-status">new</div>
                                        </figure>
                                    </div>
                                    <div class="product-img">
                                        <figure>
                                            <img src="frontend/img/product/product-1.jpg" alt=""/>
                                            <div class="p-status">new</div>
                                        </figure>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-6">
                                <div class="product-content">
                                    <h2>Dotted Blue Shirt</h2>
                                    <div class="pc-meta">
                                        <h5>$22.90</h5>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                        viverra maecenas accumsan lacus vel facilisis.</p>
                                    <ul class="tags">
                                        <li><span>Category :</span> Men’s Wear</li>
                                        <li><span>Tags :</span> man, shirt, dotted, elegant, cool</li>
                                    </ul>
                                    <div class="product-quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1"/>
                                        </div>
                                    </div>
                                    <Router>
                                    <Link to="#" class="primary-btn pc-btn">Add to cart</Link>
                                    </Router>
                                    <ul class="p-info">
                                        <li>Product Information</li>
                                        <li>Reviews</li>
                                        <li>Product Care</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        );
    };
}

export default ProductDetail;