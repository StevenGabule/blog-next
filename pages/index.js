import React from "react";
import Layout from "../components/Layout";
import baseUrl from "../utils/baseUrl";
import axios from 'axios'
import moment from 'moment'

function Index({articles}) {
    return (
        <Layout title={'Home Page'}>
            <div className="container">
                <div className="row row-cols-1 row-cols-md-3 g-4">
                    {articles &&  articles.data.map(({id, cover_photo, title, sub_title, created_at}) => (
                        <div className="col mb-4" key={id}>
                            <div className="card h-100">
                                <img src={cover_photo} className="card-img-top" alt={title} />
                                <div className="card-body">
                                    <h5 className="card-title">{title}</h5>
                                    <p className="card-text">{sub_title}</p>
                                </div>
                                <div className="card-footer">
                                    <small className="text-muted">{moment().fromNow(created_at)}</small>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </Layout>
    )
}

Index.getInitialProps = async (ctx) => {
    const page = ctx.query.page ? ctx.query.page : "1";
    const size = 15;
    const url = `${baseUrl}/articles`
    const payload = {params: {page, size}}

    // fetch data from server
    const {data: { articles }} = await axios.get(url);
    return {articles};
}

export default Index;
