import React from 'react';
import { Link } from '@inertiajs/react';
import './app.css'; // นำเข้าไฟล์ CSS

export default function Index({ products }) {
    return (
        <div className="container">
            <h1>รายการสินค้า</h1>
            <div className="product-list">
                {products.map((product) => (
                    <div className="product-item" key={product.id}>
                        <img src={product.image} alt={product.name} />
                        <h3>{product.name}</h3>
                        <p>${product.price}</p>
                        <Link href={`/products/${product.id}`}>View Details</Link>
                    </div>
                ))}
            </div>
        </div>
    );
}
