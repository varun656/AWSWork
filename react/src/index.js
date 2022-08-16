import React from 'react';
import ReactDOM from 'react-dom';
import { Provider } from "react-redux";
import { NotificationContainer } from 'react-notifications';
import 'react-notifications/lib/notifications.css';
//import 'bootstrap/dist/css/bootstrap.min.css';

import configureStore from "./store/";

import App from './routes/';

ReactDOM.render(
    <Provider store={configureStore}>
        <App />
        <NotificationContainer/>
    </Provider>,
    document.getElementById("root")
);
