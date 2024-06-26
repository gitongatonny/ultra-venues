import pandas as pd
from sklearn.metrics.pairwise import cosine_similarity
from sklearn.feature_extraction.text import TfidfVectorizer
from database import get_data_from_db

def get_venue_recommendations(selected_venue_id, n_recommendations=5):
    df = get_data_from_db()

    # Combine relevant features into a single string for each venue
    df['features'] = df['location'] + ' ' + df['type'] + ' ' + df['amenities']

    # Vectorize the features using TF-IDF
    vectorizer = TfidfVectorizer(stop_words='english')
    feature_matrix = vectorizer.fit_transform(df['features'])

    # Compute cosine similarity
    cosine_sim = cosine_similarity(feature_matrix, feature_matrix)

    # Get the index of the selected venue
    selected_index = df[df['venue_id'] == selected_venue_id].index[0]

    # Get similarity scores for the selected venue
    sim_scores = list(enumerate(cosine_sim[selected_index]))

    # Sort venues based on similarity scores
    sim_scores = sorted(sim_scores, key=lambda x: x[1], reverse=True)

    # Get the indices of the top recommendations
    rec_indices = [i[0] for i in sim_scores[1:n_recommendations + 1]]

    # Return the recommended venues
    recommended_venues = df.iloc[rec_indices]
    return recommended_venues

