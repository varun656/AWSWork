import React from 'react'
import { Navbar } from "reactstrap";
import '../../../../assets/css/bootstrap.min.css';
import '../../../../assets/css/style.css';
import '../../../../assets/css/responsive.css';
import logo from "../../../../assets/images/logo.png";
import {Link} from "react-router-dom";

const logoStyle = {
    height: '54px',
    width: 'auto'
}

export default class Header extends React.Component {
    render() {
        return (
            <div className="wrapper">
                <div className="container header-container">
                    <Navbar className="navbar navbar-default">
                        <div className="navbar-header">
                            <button type="button" className="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span className="sr-only">Toggle navigation</span>
                                <span className="icon-bar"></span>
                                <span className="icon-bar"></span>
                                <span className="icon-bar"></span>
                            </button>

                            <Link
                                className="navbar-brand"
                                to={{ pathname: 'home' }}>
                                <img src={logo} alt="" style={logoStyle}/>
                            </Link>
                        </div>

                        <div className="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul className="nav navbar-nav">

                                <li><a href className="visible-xs">My Account</a></li>
                                <li>
                                    <Link
                                        className="visible-xs"
                                        to={{ pathname: 'quote' }}>
                                        Get Quote
                                    </Link>
                                </li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div className="menu-links hidden-xs">
                            <ul>
                                <li><a className="btn btn-default" href="javascript:void(0)">My Account</a></li>
                                <li>
                                    <Link
                                        className="btn btn-brand"
                                        to={{ pathname: 'quote' }}>
                                        Get Quote
                                    </Link>
                                </li>
                            </ul>
                            <div className="clearfix"></div>
                        </div>
                    </Navbar>

                </div>
            </div>
        );
    }
}