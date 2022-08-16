import React from 'react'
import helpingHand from "../../../../assets/images/helping-hand.svg";
import charityLogo from "../../../../assets/images/logo-chariry1.png";
import charityLogo2 from "../../../../assets/images/logo-chariry2.png";
import charityLogo3 from "../../../../assets/images/logo-chariry3.png";
import charityLogo4 from "../../../../assets/images/logo-chariry4.png";


export default class Helping extends React.Component {

    render() {
        return (
            <section className="helping">
                <div className="container">
                    <div className="left">
                        <img src={helpingHand} className="img-responsive" alt="helping Hand" />
                    </div>

                    <div className="right">
                        <h1>Our helping hand</h1>
                        <p>Home is behind, the world ahead and there are many paths to tread through shadows to the
                            edge.</p>
                        <ul>
                            <li>
                                <img src={charityLogo} alt="charity Logo" />
                            </li>
                            <li>
                                <img src={charityLogo2} alt="charity Logo2" />
                            </li>
                            <li>
                                <img src={charityLogo3} alt="charity Logo3" />
                            </li>
                            <li>
                                <img src={charityLogo4}  alt="charity Logo4" />
                            </li>
                        </ul>
                    </div>
                    <div className="clearfix"></div>
                </div>
            </section>
        );
    }
}