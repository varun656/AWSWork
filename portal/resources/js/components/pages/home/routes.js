import { lazy } from "react";
export default [
    {
        path: "/home",
        exact: true,
        auth: false,
        component: lazy(() => import("./index")),
    },
];