// import modular routes
import webRoutes from "../modules/web/routes";
import authRoutes from "../modules/auth/routes";
import userRoutes from "../modules/user/routes";
import articleRoutes from "../modules/article/routes";

console.log("routes.js");
export default [...webRoutes, ...authRoutes, ...userRoutes, ...articleRoutes];
