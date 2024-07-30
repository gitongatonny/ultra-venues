from flask import Flask, request, jsonify
from flask_cors import CORS
from recommendations import get_venue_recommendations, get_popular_venues

app = Flask(__name__)
CORS(app)  # Enable CORS for all routes

@app.route('/recommend', methods=['GET'])
def recommend():
    venue_id = request.args.get('id')
    n_recommendations = int(request.args.get('n', 5))
    
    if venue_id:
        venue_id = int(venue_id)
        recommendations = get_venue_recommendations(venue_id, n_recommendations)
    else:
        recommendations = get_popular_venues(n_recommendations)
    
    return jsonify(recommendations.to_dict(orient='records'))

if __name__ == '__main__':
    app.run(debug=True)

