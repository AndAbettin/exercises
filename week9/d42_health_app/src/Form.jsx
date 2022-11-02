import { useState, useEffect } from 'react';

export default function Form() {

    const [formData, setFormData] = useState({
        category_id: null,
        type_id: null,
        date: null
    });

    const [categories, setCategories] = useState([]);
    const [types, setTypes] = useState([]);

    const loadCategories = async () => {
        const response = await fetch('https://test-api.codingbootcamp.cz/api/8b67a320/health/categories');
        const data = await response.json();

        setCategories(data);
    }

    useEffect(() => {
        loadCategories();
    }, []);

    useEffect(() => {
        if (formData.category_id) {
            const category = categories.find(category => category.id == formData.category_id);
            setTypes(category.types);
            setFormData({
                ...formData,
                type_id: category.types[0].id
            });
        } else {
            setTypes([]);
            setFormData({
                ...formData,
                type_id: undefined
            });
        }
    }, [formData.category_id])

    const categorySelected = (event) => {
        setFormData({
            ...formData,
            category_id: event.target.value
        });
    }
    const typeSelected = (event) => {
        setFormData({
            ...formData,
            type_id: event.target.value
        });
    }

    return (
        <div className="activity-form">
            Choose a category: <br />
            <select name="category_id" value={formData.category_id} onChange={categorySelected}>
                <option value="">-- no category chosen --</option>
                {
                    categories.map(category => {
                        return <option key={category.id} value={category.id}>{category.name}</option>
                    })
                }
            </select>

            {
                formData.category_id
                    ? (
                        <>
                            <br />
                            <br />
                            Choose activity type:<br />
                            <select name="type_id" value={formData.type_id} onChange={typeSelected}>
                                {
                                    types.map(type => (
                                        <option key={type.id} value={type.id}>{type.name}</option>
                                    ))
                                }
                            </select>
                        </>
                    )
                    : ''
            }
        </div>
    )
}