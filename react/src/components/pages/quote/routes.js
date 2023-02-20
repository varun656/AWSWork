import { lazy } from "react";
export default [
    {
        path: "/quote",
        exact: true,
        auth: false,
        component: lazy(() => import("./index")),
    },
];