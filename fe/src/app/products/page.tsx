'use client'

import { useState, useEffect } from 'react';
import Image from "next/image";

export default function Page() {
    const [products, setProducts] = useState([]);

    useEffect(() => {
        async function fetchProducts() {
            let response = await fetch("https://owensmart.store/api/product");
            let data = await response.json();
            console.log(data.data);
            setProducts(data.data);
        }

        fetchProducts();
    }, []);

    return (
        <div>
            <div className="overflow-x-auto">
                <table className="table">
                    {/* head */}
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Job</th>
                            <th>Favorite Color</th>
                        </tr>
                    </thead>
                    <tbody>
                        {products.map((pro: any, index) => (
                            <tr key={pro.id}>
                                <th>{index + 1}</th>
                                <td>{pro.name}</td>
                                <td>{pro.price || "Unknown"}</td>
                                <td>{pro.status || "Unknown"}</td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>

        </div>
    );
}
