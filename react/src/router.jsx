import React from "react";
import { createBrowserRouter, RouterProvider } from "react-router-dom";
import AdminLayout from "./views/layouts/AdminLayout";
import GuestLayout from "./views/layouts/GuestLayout";
import Error from "./views/pages/Error";
import Dashboard from "./views/pages/Dashboard";
import Login from "./views/pages/Login";
import Application from "./views/pages/Application";

const router = createBrowserRouter([
    {
        path: "/",
        element: <GuestLayout></GuestLayout>,
        children: [
            {
                path:"/application",
                element: <Application></Application>
            },
            {
                path:"/login",
                element: <Login></Login>
            }
        ]
    },
    {
        path: "/",
        element: <AdminLayout></AdminLayout>,
        children: [
            {
                path:"/dashboard",
                element: <Dashboard></Dashboard>
            }
        ]
    },
    {
        path: "*",
        element: <Error></Error>
    }
]);

export default router
