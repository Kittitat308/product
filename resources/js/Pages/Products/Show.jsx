import React from 'react';
import { Link } from '@inertiajs/react';
import './app.css'; // นำเข้าไฟล์ CSS

export default function Show({ product }) {
    return (
        <div className="product-detail">
            <div className='product-container'>
                <img src={product.image} alt={product.name} />
                <h1>{product.name}</h1>
                <p>{product.description}</p>
                <p className="price">Price: ${product.price}</p>
                <Link href="/products">Back to All Products</Link>
            </div>
        </div>
    );
}
