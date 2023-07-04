import axios from 'axios';

const  API = async (slug) => {
  

  const rest = await axios.get(`/wp-json/wp/v2/pages?slug=${slug}&acf_format=standard`)
  return rest.data[0];
}

export default API;

/*
&acf_format=standard
menu
setting
search
acf_options
single_by_id
single_by_slug
*/