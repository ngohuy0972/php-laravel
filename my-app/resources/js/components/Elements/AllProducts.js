import React, { Component } from 'react';

class AllProducts extends Component {
    render(){
        return(
        <div className="all-products-container">
          <section className="categories-page spad">
            <div className="container">
                <div className="categories-controls">
                    <div className="row">
                        <div className="col-lg-12">
                            <div className="categories-filter">
                                <div className="cf-left">
                                    <form action="#">
                                        <select className="sort">
                                            <option value="">Sort by</option>
                                            <option value="">Orders</option>
                                            <option value="">Newest</option>
                                            <option value="">Price</option>
                                        </select>
                                    </form>
                                </div>
                                <div className="cf-right">
                                    <span>20 Products</span>
                                    <a href="#">2</a>
                                    <a href="#" className="active">4</a>
                                    <a href="#">6</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="row">
                    <div className="col-lg-6 col-md-6">
                        <div className="single-product-item">
                            <figure>
                                <img src="frontend/img/products/img-9.jpg" alt=""/>
                                <div className="p-status">new</div>
                                <div className="hover-icon">
                                    <a href="frontend/img/products/img-9.jpg" className="pop-up"><img src="img/icons/zoom-plus.png"
                                            alt=""/></a>
                                </div>
                            </figure>
                            <div className="product-text">
                                <a href="#">
                                    <h6>Green Dress with details</h6>
                                </a>
                                <p>$22.90</p>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-6 col-md-6">
                        <div className="row">
                            <div className="col-lg-6 col-md-6">
                                <div className="single-product-item">
                                    <figure>
                                        <img src="frontend/img/products/img-2.jpg" alt=""/>
                                        <div className="p-status sale">sale</div>
                                    </figure>
                                    <div className="product-text">
                                        <a href="#">
                                            <h6>Yellow Maxi Dress</h6>
                                        </a>
                                        <p>$25.90</p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-6 col-md-6">
                                <div className="single-product-item">
                                    <figure>
                                        <img src="frontend/img/products/img-3.jpg" alt=""/>
                                        <div className="p-status">new</div>
                                        <div className="hover-icon">
                                            <a href="frontend/img/products/img-3.jpg" className="pop-up"><img
                                                    src="frontend/img/icons/zoom-plus.png" alt=""/></a>
                                        </div>
                                    </figure>
                                    <div className="product-text">
                                        <a href="#">
                                            <h6>One piece bodysuit</h6>
                                        </a>
                                        <p>$19.90</p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-6 col-md-6">
                                <div className="single-product-item">
                                    <figure>
                                        <img src="frontend/img/products/img-6.jpg" alt=""/>
                                        <div className="p-status sale">sale</div>
                                    </figure>
                                    <div className="product-text">
                                        <a href="#">
                                            <h6>Yellow Maxi Dress</h6>
                                        </a>
                                        <p>$25.90</p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-6 col-md-6">
                                <div className="single-product-item">
                                    <figure>
                                        <img src="frontend/img/products/img-1.jpg" alt=""/>
                                        <div className="hover-icon">
                                            <a href="frontend/img/products/img-1.jpg" className="pop-up"><img
                                                    src="frontend/img/icons/zoom-plus.png" alt=""/></a>
                                        </div>
                                    </figure>
                                    <div className="product-text">
                                        <a href="#">
                                            <h6>One piece bodysuit</h6>
                                        </a>
                                        <p>$19.90</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6">
                        <div className="single-product-item">
                            <figure>
                                <img src="frontend/img/products/img-5.jpg" alt=""/>
                                <div className="p-status">new</div>
                                <div className="hover-icon">
                                    <a href="frontend/img/products/img-5.jpg" className="pop-up"><img src="frontend/img/icons/zoom-plus.png"
                                            alt=""/></a>
                                </div>
                            </figure>
                            <div className="product-text">
                                <a href="#">
                                    <h6>Green Dress with details</h6>
                                </a>
                                <p>$22.90</p>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6">
                        <div className="single-product-item">
                            <figure>
                                <img src="frontend/img/products/img-4.jpg" alt=""/>
                                <div className="p-status popular">popular</div>
                                <div className="hover-icon">
                                    <a href="frontend/img/products/img-4.jpg" className="pop-up"><img src="frontend/img/icons/zoom-plus.png"
                                            alt=""/></a>
                                </div>
                            </figure>
                            <div className="product-text">
                                <a href="#">
                                    <h6>Blue Dress with details</h6>
                                </a>
                                <p>$35.50</p>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6">
                        <div className="single-product-item">
                            <figure>
                                <img src="frontend/img/products/img-8.jpg" alt=""/>
                                <div className="p-status popular">popular</div>
                                <div className="hover-icon">
                                    <a href="frontend/img/products/img-8.jpg" className="pop-up"><img src="frontend/img/icons/zoom-plus.png"
                                            alt=""/></a>
                                </div>
                            </figure>
                            <div className="product-text">
                                <a href="#">
                                    <h6>Blue Dress with details</h6>
                                </a>
                                <p>$35.50</p>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6">
                        <div className="single-product-item">
                            <figure>
                                <img src="frontend/img/products/img-10.jpg" alt=""/>
                                <div className="p-status popular">popular</div>
                                <div className="hover-icon">
                                    <a href="frontend/img/products/img-10.jpg" className="pop-up"><img src="frontend/img/icons/zoom-plus.png"
                                            alt=""/></a>
                                </div>
                            </figure>
                            <div className="product-text">
                                <a href="#">
                                    <h6>Blue Dress with details</h6>
                                </a>
                                <p>$35.50</p>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-6 col-md-6">
                        <div className="row">
                            <div className="col-lg-6 col-md-6">
                                <div className="single-product-item">
                                    <figure>
                                        <img src="frontend/img/products/img-11.jpg" alt=""/>
                                        <div className="p-status sale">sale</div>
                                    </figure>
                                    <div className="product-text">
                                        <a href="#">
                                            <h6>Yellow Maxi Dress</h6>
                                        </a>
                                        <p>$25.50</p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-6 col-md-6">
                                <div className="single-product-item">
                                    <figure>
                                        <img src="frontend/img/products/img-12.jpg" alt=""/>
                                        <div className="p-status">new</div>
                                        <div className="hover-icon">
                                            <a href="frontend/img/products/img-12.jpg" className="pop-up"><img
                                                    src="frontend/img/icons/zoom-plus.png" alt=""/></a>
                                        </div>
                                    </figure>
                                    <div className="product-text">
                                        <a href="#">
                                            <h6>One piece bodysuit</h6>
                                        </a>
                                        <p>$19.90</p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-6 col-md-6">
                                <div className="single-product-item">
                                    <figure>
                                        <img src="frontend/img/products/img-14.jpg" alt=""/>
                                        <div className="p-status sale">sale</div>
                                    </figure>
                                    <div className="product-text">
                                        <a href="#">
                                            <h6>Yellow Maxi Dress</h6>
                                        </a>
                                        <p>$25.90</p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-6 col-md-6">
                                <div className="single-product-item">
                                    <figure>
                                        <img src="frontend/img/products/img-15.jpg" alt=""/>
                                        <div className="hover-icon">
                                            <a href="frontend/img/products/img-15.jpg" className="pop-up"><img
                                                    src="frontend/img/icons/zoom-plus.png" alt=""/></a>
                                        </div>
                                    </figure>
                                    <div className="product-text">
                                        <a href="#">
                                            <h6>One piece bodysuit</h6>
                                        </a>
                                        <p>$19.90</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-6 col-md-6">
                        <div className="single-product-item">
                            <figure>
                                <img src="frontend/img/products/img-13.jpg" alt=""/>
                                <div className="p-status">new</div>
                                <div className="hover-icon">
                                    <a href="frontend/img/products/img-13.jpg" className="pop-up"><img src="frontend/img/icons/zoom-plus.png"
                                            alt=""/></a>
                                </div>
                            </figure>
                            <div className="product-text">
                                <a href="#">
                                    <h6>Green Dress with details</h6>
                                </a>
                                <p>$22.90</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="more-product">
                    <div className="row">
                        <div className="col-lg-12 text-center">
                            <a href="#" className="primary-btn">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      </div>    
        );
    }
}

export default AllProducts;