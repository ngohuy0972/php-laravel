import React, { Component } from 'react';
import { BrowserRouter as Router, Link } from 'react-router-dom';
import Breadcrumb from '../Elements/Breadcrumb';
import ContactElement from '../Elements/ContactElement';

class Contact extends Component {
    render(){
        return(
            <div className='contact-container'>
                <Breadcrumb></Breadcrumb>
                <ContactElement></ContactElement>
            </div>
        
        );
    };
}

export default Contact;