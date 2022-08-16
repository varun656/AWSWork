import React from 'react'

import heromain from "../../../../assets/images/hero-main.svg";
import heroxs from "../../../../assets/images/hero-main-xs.svg";
import {Link} from "react-router-dom";

export default class Health extends React.Component {
    render() {
        return (
            <div>
                <section className="first-section">
                    <div className="container">
                        <div className="left">
                            <h1>Expat Health Insurance</h1>
                            <p>Get your global health insurance and always feel at home.</p>
                            <Link
                                className="btn btn-brand"
                                to={{ pathname: 'quote' }}>
                                Get Quote
                            </Link>
                        </div>

                        <div className="right">
                            <img className="hidden-xs" src={heromain} alt="" />
                            <img className="visible-xs" src={heroxs} alt=""/>
                        </div>

                        <div className="clearfix"></div>
                    </div>
                </section>
            </div>
        );
    }
}