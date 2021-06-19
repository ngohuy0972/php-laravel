import React,{Component} from 'react';

class Products extends Component{
render(){
        return(
            // <!-- Latest Product Begin -->
            <section className="latest-products spad">
                <div className="container">
                    <div className="product-filter">
                        <div className="row">
                            <div className="col-lg-12 text-center">
                                <div className="section-title">
                                    <h2>Latest Products</h2>
                                </div>
                                <ul className="product-controls">
                                    <li data-filter="*">All</li>
                                    <li data-filter=".dresses">Dresses</li>
                                    <li data-filter=".bags">Bags</li>
                                    <li data-filter=".shoes">Shoes</li>
                                    <li data-filter=".accesories">Accesories</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div className="row" id="product-list">
                        <div className="col-lg-3 col-sm-6 mix all dresses bags">
                            <div className="single-product-item">
                                <figure>
                                    <a href="#"><img src="frontend/img/products/img-1.jpg" alt=""/></a>
                                    <div className="p-status">new</div>
                                </figure>
                                <div className="product-text">
                                    <h6>Green Dress with details</h6>
                                    <p>$22.90</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-3 col-sm-6 mix all dresses bags">
                            <div className="single-product-item">
                                <figure>
                                    <a href="#"><img src="frontend/img/products/img-2.jpg" alt=""/></a>
                                    <div className="p-status sale">sale</div>
                                </figure>
                                <div className="product-text">
                                    <h6>Yellow Maxi Dress</h6>
                                    <p>$25.90</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-3 col-sm-6 mix all shoes accesories">
                            <div className="single-product-item">
                                <figure>
                                    <a href="#"><img src="frontend/img/products/img-3.jpg" alt=""/></a>
                                    <div className="p-status">new</div>
                                </figure>
                                <div className="product-text">
                                    <h6>One piece bodysuit</h6>
                                    <p>$19.90</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-3 col-sm-6 mix all shoes accesories">
                            <div className="single-product-item">
                                <figure>
                                    <a href="#"><img src="frontend/img/products/img-4.jpg" alt=""/></a>
                                    <div className="p-status popular">popular</div>
                                </figure>
                                <div className="product-text">
                                    <h6>Blue Dress with details</h6>
                                    <p>$35.50</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-3 col-sm-6 mix all dresses shoes">
                            <div className="single-product-item">
                                <figure>
                                    <a href="#"><img src="frontend/img/products/img-5.jpg" alt=""/></a>
                                    <div className="p-status">new</div>
                                </figure>
                                <div className="product-text">
                                    <h6>Green Dress with details</h6>
                                    <p>$22.90</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-3 col-sm-6 mix all accesories bags">
                            <div className="single-product-item">
                                <figure>
                                    <a href="#"><img src="frontend/img/products/img-6.jpg" alt=""/></a>
                                    <div className="p-status sale">sale</div>
                                </figure>
                                <div className="product-text">
                                    <h6>Yellow Maxi Dress</h6>
                                    <p>$25.90</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-3 col-sm-6 mix all dresses bags">
                            <div className="single-product-item">
                                <figure>
                                    <a href="#"><img src="frontend/img/products/img-7.jpg" alt=""/></a>
                                </figure>
                                <div className="product-text">
                                    <h6>One piece bodysuit</h6>
                                    <p>$19.90</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-3 col-sm-6 mix all accesories bags">
                            <div className="single-product-item">
                                <figure>
                                    <a href="#"><img src="frontend/img/products/img-8.jpg" alt=""/></a>
                                    <div className="p-status popular">popular</div>
                                </figure>
                                <div className="product-text">
                                    <h6>Blue Dress with details</h6>
                                    <p>$35.50</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    //  <!-- Latest Product End --> 
        );
    }
}

export default Products;