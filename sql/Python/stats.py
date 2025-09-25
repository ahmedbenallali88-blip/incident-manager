import mysql.connector
import pandas as pd

conn = mysql.connector.connect(
    host="localhost", user="root", password="", database="incident_db"
)
df = pd.read_sql("SELECT * FROM incidents", conn)

print("📊 Nombre total d'incidents:", len(df))
print("🧑‍🔧 Par animateur:\n", df["animateur"].value_counts())
print("⚠️ Défauts fréquents:\n", df["defaut1"].value_counts())
