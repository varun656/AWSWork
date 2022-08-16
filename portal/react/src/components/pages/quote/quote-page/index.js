import React from 'react'
import quoteBack from "../../../../assets/images/icons/icon-quote-back.svg";
import QuoteHOC from './QuoteHOC';

import Name from "./Name/Name";
import Country from "./country/index";
import Converge from "./converge/index";
import Live from "./live/index";
import Gender from "./gender/index";
import perDay from "./perDay/index";
import Height from "./height/index";


const QUOTE_FLOW = [
    Name,
    Country,
    Converge,
    Live,
    Gender,
    perDay,
    Height
];

export default class QuotePage extends React.Component {

    state = {
        stepIndex: 0,
        width: 70,
    };

    next = () => {
        this.setState(prevState => ({
            stepIndex: prevState.stepIndex + 1,
            width: prevState.width + 70
        }));
    };

    prev = () => {
        this.setState(prevState => ({
            stepIndex: prevState.stepIndex - 1,
            width: prevState.width - 70
        }));
    };

    render() {
        return (
            <div className="container">
                <div className="quote-page">
                    <div className="progress-bar">
                        <a href="javascript:void(0)" className="back">
                            <img src={quoteBack} alt="" />
                        </a>
                        <div className="progress" style={{width : this.state.width+ 'px'}}></div>
                    </div>
                    {QuoteHOC(QUOTE_FLOW[this.state.stepIndex], this.next, this.prev)}
                </div>
            </div>
        );
    }
}