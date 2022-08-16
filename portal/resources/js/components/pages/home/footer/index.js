import React from 'react'
import footerLogo from "../../../../assets/images/logo-footer.png";
import linkedin from "../../../../assets/images/icons/linkedin.svg";
import facebook from "../../../../assets/images/icons/facebook.svg";
import instagram from "../../../../assets/images/icons/instagram.svg";
import twitter from "../../../../assets/images/icons/twitter.svg";

export default class Footer extends React.Component {
    socialMediaLinks = (e) => {
        e.preventDefault()
        console.log('onclick..')
    }

    render() {
        return (
            <footer>
                <div className="container-fluid">
                    <div className="row">
                        <div className="col-md-1">
                            <img className="footer-logo" src={footerLogo} alt="Footer Logo" />
                        </div>
                        <div className="col-xs-4 col-md-2">
                            <h4>Details</h4>
                            <ul>
                                <li><a href="javascript:void(0)">Products</a></li>
                                <li><a href="javascript:void(0)">Partners</a></li>
                            </ul>
                        </div>
                        <div className="col-xs-4 col-md-2">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="javascript:void(0)">About</a></li>
                                <li><a href="javascript:void(0)">Blog</a></li>
                            </ul>
                        </div>
                        <div className="col-xs-4 col-md-2">
                            <h4>Support</h4>
                            <ul>
                                <li><a href="javascript:void(0)">FAQ</a></li>
                                <li><a href="javascript:void(0)">My Account</a></li>
                            </ul>
                        </div>
                        <div className="col-md-4 col-md-offset-1 newsletter">
                            <h4>WANT TO LEARN MORE?</h4>
                            <p>Join our newsletter to recieve updates on insurance news</p>
                            <form>
                                <input type="text" className="form-control" placeholder="Enter your email" />
                                <button type="button" className="btn btn-brand">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div className="footer-bottom">
                    <div className="container-fluid">
                        <div className="left">
                            Copyright © Xpat All rights reserved
                        </div>
                        <div className="right">
                            <ul>
                                <li><a href onClick={this.socialMediaLinks}><img src={linkedin} alt="linkedin" /></a>
                                </li>
                                <li><a href onClick={this.socialMediaLinks}><img src={facebook} alt="facebook" /></a>
                                </li>
                                <li><a href onClick={this.socialMediaLinks}><img src={instagram} alt="instagram" /></a>
                                </li>
                                <li><a href onClick={this.socialMediaLinks}><img src={twitter} alt="twitter" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        );
    }
}