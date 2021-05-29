import React,{Component} from 'react';
import { Switch,Route,Link } from "react-router-dom";

class Header extends Component{
render(){
        return(
            <div>
                
                <div id="preloder">
                    <div className="loader"></div>
                </div>
                
       
                <div className="search-model">
                    <div className="h-100 d-flex align-items-center justify-content-center">
                        <div className="search-close-switch">+</div>
                        <form className="search-model-form"/>
                            <input type="text" id="search-input" placeholder="Search here....."/>
                        
                    </div>
                </div>
         
                <div className="header-section">
                    <div className="container-fluid">
                        <div className="inner-header">
                            <div className="logo">
                                <a href="./index.html"><img src="frontend/img/logo.png" alt=""/></a>
                            </div>
                            <div className="header-right">
                                <img src="frontend/img/icons/search.png" alt="" className="search-trigger"/>
                                <img src="frontend/img/icons/man.png" alt=""/>
                                <a href="#">
                                    <img src="frontend/img/icons/bag.png" alt=""/>
                                    <span>2</span>
                                </a>
                            </div>
                            <div className="user-access">
                                <a href="#">Register</a>
                                <a href="#" className="in">Sign in</a>
                            </div>
                            <nav className="main-menu mobile-menu">
                                <ul>
                                    <li><a className="active" href="./index.html">Home</a></li>
                                    <li><a href="./categories.html">Shop</a>
                                        <ul className="sub-menu">
                                            <li><a href="product-page.html">Product Page</a></li>
                                            <li><a href="shopping-cart.html">Shopping Card</a></li>
                                            <li><a href="check-out.html">Check out</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./product-page.html">About</a></li>
                                    <li><a href="./check-out.html">Blog</a></li>
                                    <li><a href="./contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div className="header-info">
                    <div className="container-fluid">
                        <div className="row">
                            <div className="col-md-4">
                                <div className="header-item">
                                    <img src="frontend/img/icons/delivery.png" alt=""/>
                                    <p>Free shipping on orders over $30 in USA</p>
                                </div>
                            </div>
                            <div className="col-md-4 text-left text-lg-center">
                                <div className="header-item">
                                    <img src="frontend/img/icons/voucher.png" alt=""/>
                                    <p>20% Student Discount</p>
                                </div>
                            </div>
                            <div className="col-md-4 text-left text-xl-right">
                                <div className="header-item">
                                <img src="frontend/img/icons/sales.png" alt=""/>
                                <p>30% off on dresses. Use code: 30OFF</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        );
    }
}

export default Header;