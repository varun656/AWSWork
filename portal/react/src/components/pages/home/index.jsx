import React from 'react'
import Header from './header/index';
import Health from './health/index';
import Converge from './converge/index';
import Goal from './goal/index';
import FAQ from './faqs/index';
import Helping from './helping/index';
import Blogs from './blog/index';
import Footer from './footer/index';


export default class Home extends React.Component {
    render() {
        return (
            <div>
                <Header />
                <Health />
                <Converge />
                <Goal />
                <FAQ />
                <Helping />
                <Blogs />
                <Footer />
            </div>
        );
    }
}