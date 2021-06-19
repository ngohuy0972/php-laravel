import React,{Component} from 'react';
import { BrowserRouter as Router, Link } from 'react-router-dom';

class Footer extends Component{
render(){
        return(     
            <footer className="footer-section spad">
                <div className="container">
                    <div className="newslatter-form">
                        <div className="row">
                            <div className="col-lg-12">
                                <form action="#">
                                    <input type="text" placeholder="Your email address"/>
                                    <button type="submit">Subscribe to our newsletter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div className="footer-widget">
                        <div className="row">
                            <div className="col-lg-3 col-sm-6">
                                <div className="single-footer-widget">
                                    <h4>About us</h4>
                                    <ul>
                                        <li>About Us</li>
                                        <li>Community</li>
                                        <li>Jobs</li>
                                        <li>Shipping</li>
                                        <li>Contact Us</li>
                                    </ul>
                                </div>
                            </div>
                            <div className="col-lg-3 col-sm-6">
                                <div className="single-footer-widget">
                                    <h4>Customer Care</h4>
                                    <ul>
                                        <li>Search</li>
                                        <li>Privacy Policy</li>
                                        <li>2019 Lookbook</li>
                                        <li>Shipping and Delivery</li>
                                        <li>Gallery</li>
                                    </ul>
                                </div>
                            </div>
                            <div className="col-lg-3 col-sm-6">
                                <div className="single-footer-widget">
                                    <h4>Our Services</h4>
                                    <ul>
                                        <li>Free Shipping</li>
                                        <li>Free Returnes</li>
                                        <li>Our Franchising</li>
                                        <li>Terms and conditions</li>
                                        <li>Privacy Policy</li>
                                    </ul>
                                </div>
                            </div>
                            <div className="col-lg-3 col-sm-6">
                                <div className="single-footer-widget">
                                    <h4>Information</h4>
                                    <ul>
                                        <li>Payment methods</li>
                                        <li>Times and shipping costs</li>
                                        <li>Product Returns</li>
                                        <li>Shipping methods</li>
                                        <li>Conformity of the products</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <Router>
                <div className="social-links-warp">
                    <div className="container">
                        <div className="social-links">
                            <Link to="" className="instagram"><i className="fa fa-instagram"></i><span>instagram</span></Link>
                            <Link to="" className="pinterest"><i className="fa fa-pinterest"></i><span>pinterest</span></Link>
                            <Link to="" className="facebook"><i className="fa fa-facebook"></i><span>facebook</span></Link>
                            <Link to="" className="twitter"><i className="fa fa-twitter"></i><span>twitter</span></Link>
                            <Link to="" className="youtube"><i className="fa fa-youtube"></i><span>youtube</span></Link>
                            <Link to="" className="tumblr"><i className="fa fa-tumblr-square"></i><span>tumblr</span></Link>
                        </div>
                    </div>

                    <div className="container text-center pt-5">
                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Huy Bappp  
                        </p>
                    </div>
                </div>
                </Router>
    </footer>
        );
    }
}

export default Footer;