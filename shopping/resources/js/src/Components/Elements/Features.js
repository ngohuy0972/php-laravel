import React,{Component} from 'react';

class Features extends Component{
render(){
        return(
            <section className="features-section spad">
            <div className="features-ads">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-4">
                            <div className="single-features-ads first">
                                <img src="img/icons/f-delivery.png" alt=""/>
                                <h4>Free shipping</h4>
                                <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal
                                    esuada aliquet libero viverra cursus. </p>
                            </div>
                        </div>
                        <div className="col-lg-4">
                            <div className="single-features-ads second">
                                <img src="img/icons/coin.png" alt=""/>
                                <h4>100% Money back </h4>
                                <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                    aliquet libero viverra cursus. </p>
                            </div>
                        </div>
                        <div className="col-lg-4">
                            <div className="single-features-ads">
                                <img src="img/icons/chat.png" alt=""/>
                                <h4>Online support 24/7</h4>
                                <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                    aliquet libero viverra cursus. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {/* <!-- Features Box --> */}
            <div className="features-box">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-6">
                            <div className="row">
                                <div className="col-lg-12">
                                    <div className="single-box-item first-box">
                                        <img src="img/f-box-1.jpg" alt=""/>
                                        <div className="box-text">
                                            <span className="trend-year">2019 Party</span>
                                            <h2>Jewelry</h2>
                                            <span className="trend-alert">Trend Allert</span>
                                            <a href="#" className="primary-btn">See More</a>
                                        </div>
                                    </div>
                                </div>
                                <div className="col-lg-12">
                                    <div className="single-box-item second-box">
                                        <img src="img/f-box-2.jpg" alt=""/>
                                        <div className="box-text">
                                            <span className="trend-year">2019 Trend</span>
                                            <h2>Footwear</h2>
                                            <span className="trend-alert">Bold and Black</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-6">
                            <div className="single-box-item large-box">
                                <img src="img/f-box-3.jpg" alt=""/>
                                <div className="box-text">
                                    <span className="trend-year">2019 Party</span>
                                    <h2>Collection</h2>
                                    <div className="trend-alert">Trend Allert</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        );
    }
}

export default Features;