import axios from "axios";
import React, { useEffect, useState } from "react";
import { Link, useParams } from "react-router-dom";
import toastr from 'toastr'

const Edit = () => {
    const [record, setRecord] = useState({ name: "", phone: "", email: "", message: "" });

    let params = useParams()
    let id = params.id;
    async function getRecord() {
        const config = {
            headers: {
                'Content-Type': 'application/json'
            }
        };
        let data = await axios.get(`http://localhost:8000/api/inquiries/get/${id}`, config)
        setRecord(data.data.record)
    }

    useEffect(() => {
        getRecord();
    }, [])


    function handleInput(e) {
        const name = e.target.name;
        const value = e.target.value;
        setRecord({ ...record, [name]: value });
    }
    async function updateRecord() {
        try {
            let data = await axios.post("http://localhost:8000/api/inquiries/update", record);
            setRecord({ name: "", phone: "", email: "", message: "" });
            getRecord()
            toastr.success('Inquiry Updated Successfully')
        } catch (error) {
            let errors = error.response.data.errors
            for (let key in errors) {
                toastr.error(errors[key])
            }
        }
    }
    return (
        <>
            <div className="container mt-2">
                <div className="card">
                    <div className="card-header">
                        <div className="d-flex justify-content-between align-items-center">
                            <h1>Edit Inquiry</h1>
                            <Link className="btn btn-secondary" to="/admin/inquiries">
                                Back
                            </Link>
                        </div>
                    </div>
                    <div className="card-body">
                        <form action="">
                            <div className="form-group">
                                <label htmlFor="name">Name:</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    className="form-control"
                                    onChange={handleInput}
                                    value={record.name}
                                />
                            </div>
                            <div className="form-group">
                                <label htmlFor="phone">Phone:</label>
                                <input
                                    type="text"
                                    name="phone"
                                    id="phone"
                                    className="form-control"
                                    onChange={handleInput}
                                    value={record.phone}
                                />
                            </div>
                            <div className="form-group">
                                <label htmlFor="email">Email:</label>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    className="form-control"
                                    onChange={handleInput}
                                    value={record.email}
                                />
                            </div>
                            <div className="form-group">
                                <label htmlFor="message">
                                    Message:
                                </label>
                                <input
                                    type="text"
                                    name="message"
                                    id="message"
                                    className="form-control"
                                    onChange={handleInput}
                                    value={record.message}
                                />
                            </div>
                            <div className="form-group mt-2">
                                <button
                                    type="button"
                                    className="btn btn-secondary"
                                    onClick={updateRecord}
                                >
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </>
    );
};

export default Edit;