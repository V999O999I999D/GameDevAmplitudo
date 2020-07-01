using System;
using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class LoseGame : MonoBehaviour
{
    [SerializeField] private GameObject prco;

    private void OnTriggerEnter2D(Collider2D other)
    {
        prco.transform.position = new Vector2(-10f, 3f);
    }
}
