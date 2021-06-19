import React, { Component } from 'react';
import { BrowserRouter as Router, Link } from 'react-router-dom';

class ContactElement extends Component {
    render(){
        return(
            <div className='contact-container'>
                <div className="contact-section">
                    <div className="container">
                        <div className="row">
                            <div className="col-lg-8">
                                <form action="#" className="contact-form">
                                    <div className="row">
                                        <div className="col-lg-6">
                                            <input type="text" placeholder="First Name"/>
                                        </div>
                                        <div className="col-lg-6">
                                            <input type="text" placeholder="Last Name"/>
                                        </div>
                                        <div className="col-lg-12">
                                            <input type="email" placeholder="E-mail"/>
                                            <input type="text" placeholder="Subject"/>
                                            <textarea placeholder="Message"></textarea>
                                        </div>
                                        <div className="col-lg-12 text-right">
                                            <button type="submit">Send message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div className="col-lg-3 offset-lg-1">
                                <div className="contact-widget">
                                    <div className="cw-item">
                                        <h5>Location</h5>
                                        <ul>
                                            <li>K7/2A Pasteur, </li>
                                            <li>Hai Chau I, Da Nang City</li>
                                        </ul>
                                    </div>
                                    <div className="cw-item">
                                        <h5>Phone</h5>
                                        <ul>
                                            <li>(+84) 856 787 657</li>
                                        </ul>
                                    </div>
                                    <div className="cw-item">
                                        <h5>E-mail</h5>
                                        <ul>
                                            <li>huyngoit99@gmail.com</li>
                                            <li>www.violetstore.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="map">
                            <div className="row">
                                <div className="col-lg-12">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1916.9535008560918!2d108.21909265804346!3d16.070314997220027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142183153ad4d23%3A0xf5e5977e9a7b5b6!2zMmEgUGFzdGV1ciwgSOG6o2kgQ2jDonUgMSwgUS4gSOG6o2kgQ2jDonUsIMSQw6AgTuG6tW5nIDU1MDAwMA!5e0!3m2!1svi!2s!4v1623506428110!5m2!1svi!2s" height={560} style={{border: 0}} allowFullScreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        
        );
    };
}

export default ContactElement;