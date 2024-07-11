import React from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";

import All from "./All";
import Create from "./Create";
import Edit from "./Edit";

const Router = () => {
    return (
        <>
            <BrowserRouter>
                <Routes>
                        <Route exact path="/admin/inquiries" element={<All />}></Route>
                        <Route
                            exact
                            path="/admin/inquiries/create"
                            element={<Create />}
                        ></Route>
                        <Route
                            exact
                            path="/admin/inquiries/edit/:id"
                            element={<Edit />}
                        ></Route>
                </Routes>
            </BrowserRouter>
        </>
    );
};

export default Router;