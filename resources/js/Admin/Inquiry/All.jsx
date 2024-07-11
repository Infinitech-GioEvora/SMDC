import React, { useEffect, useState } from "react";
import { Link } from "react-router-dom";
import axios from "axios";
import toastr from "toastr";

const All = () => {
    const [records, setRecords] = useState([]);

    async function deleteRecord(id) {
        let response = await axios.get(`http://localhost:8000/api/inquiries/delete/${id}`);
        toastr.success(response.data.message);
        getRecords();
    }

    async function getRecords() {
        let response = await axios.get("http://localhost:8000/api/inquiries");
        let recordItems = response.data.records;
        setRecords(recordItems);
    }
    useEffect(() => {
        getRecords();
    }, []);

    return (
        <>
            <div className="container mt-2">
                <div className="card">
                    <div className="card-header">
                        <div className="d-flex justify-content-between align-items-center">
                            <h1>Inquiries</h1>
                            <Link
                                className="btn btn-secondary"
                                to="/admin/inquiries/create"
                            >
                                Create
                            </Link>
                        </div>
                    </div>
                    <div className="card-body">
                        <table
                            id="myTable"
                            className="table table-bordered table-hover"
                        >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {records.map((record, index) => {
                                    return (
                                        <tr key={record.id}>
                                            <td>{index + 1}</td>
                                            <td>{record.name}</td>
                                            <td>{record.phone}</td>
                                            <td>{record.email}</td>
                                            <td>{record.message}</td>
                                            <td>
                                                <Link
                                                    className="btn btn-info"
                                                    to={`/admin/inquiries/edit/${record.id}`}
                                                >
                                                    Edit
                                                </Link>
                                                <button
                                                    className="btn btn-danger ms-1"
                                                    onClick={() =>
                                                        deleteRecord(record.id)
                                                    }
                                                >
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                    );
                                })}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </>
    );
};

export default All;
