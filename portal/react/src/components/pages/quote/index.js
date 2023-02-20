import React from 'react'
import Header from './header/index';
import QuotePage from './quote-page/index';

export default class Quote extends React.Component {
    render() {
        return (
            <div>
                <Header />
                <QuotePage />
            </div>
        );
    }
}