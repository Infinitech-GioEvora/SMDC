import React from 'react'
import ReactDOM from "react-dom/client";

import "bootstrap/dist/css/bootstrap.min.css";
import "toastr/build/toastr.css";

import Router from "./Router";

ReactDOM.createRoot(document.getElementById("router")).render(<Router />);